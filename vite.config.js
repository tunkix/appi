import { defineConfig } from 'vite'
import react from '@vitejs/plugin-react'
import fs from 'fs'
import path from 'path'

export default defineConfig({
  plugins: [
    react(),
    moduleScanner(),
  ],
  resolve: {
    alias: {
      '@': path.resolve(__dirname, 'ui/src'),
    },
  },
  publicDir: false,
  build: {
    outDir: 'public',
    emptyOutDir: false,
  },
  server: {
    port: 5173,
    proxy: {
      '/api': 'http://localhost:8080',
    },
  },
})

function moduleScanner() {
  const virtualId = 'virtual:modules'
  const resolvedId = '\0' + virtualId

  return {
    name: 'module-scanner',
    resolveId(id) {
      if (id === virtualId) return resolvedId
    },
    load(id) {
      if (id !== resolvedId) return

      const modulesDir = path.resolve('app/Modules')
      const entries = []

      try {
        const items = fs.readdirSync(modulesDir)
        for (const item of items) {
          const slug = item.toLowerCase()
          const indexPath = path.join(modulesDir, item, 'ui/index.js')
          const indexJsxPath = path.join(modulesDir, item, 'ui/index.jsx')
          if (fs.existsSync(indexPath)) {
            entries.push({ slug, path: indexPath })
          } else if (fs.existsSync(indexJsxPath)) {
            entries.push({ slug, path: indexJsxPath })
          }
        }
      } catch {}

      if (entries.length === 0) {
        return `export const modules = []`
      }

      let code = `// Auto-generated module registry\n`
      code += `export const modules = [\n`
      for (const { slug, path: modulePath } of entries) {
        const rootRelative = '/' + path.relative(path.resolve('.'), modulePath).replace(/\\/g, '/')
        code += `  { slug: '${slug}', loader: () => import('${rootRelative}') },\n`
      }
      code += `]\n`
      return code
    },
  }
}
