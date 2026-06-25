import { useState, useEffect } from 'react'
import { createBrowserRouter, RouterProvider, Navigate } from 'react-router-dom'
import { AuthProvider } from '@/hooks/useAuth'
import ProtectedRoute from '@/components/ProtectedRoute'
import AdminLayout from '@/layouts/AdminLayout'
import Login from '@/pages/Login'
import { modules } from 'virtual:modules'

export default function App() {
  return (
    <AuthProvider>
      <AppContent />
    </AuthProvider>
  )
}

function AppContent() {
  const [moduleDefs, setModuleDefs] = useState([])
  const [ready, setReady] = useState(false)

  useEffect(() => {
    Promise.all(modules.map(m => m.loader().then(mod => mod.default)))
      .then(defs => setModuleDefs(defs.filter(Boolean)))
      .finally(() => setReady(true))
  }, [])

  if (!ready) {
    return (
      <div className="flex items-center justify-center min-h-screen">
        <p className="text-gray-500">Loading...</p>
      </div>
    )
  }

  const navItems = moduleDefs
    .filter(m => m.nav)
    .sort((a, b) => (a.nav?.order ?? 99) - (b.nav?.order ?? 99))
    .map(m => ({
      path: m.routes?.[0]?.path || `/${m.slug}`,
      label: m.nav.label || m.slug,
    }))

  const moduleRoutes = moduleDefs.flatMap(m =>
    (m.routes || []).map(route => ({
      path: route.path,
      element: <ProtectedRoute roles={route.roles}>{route.element}</ProtectedRoute>,
    }))
  )

  const router = createBrowserRouter([
    {
      path: '/login',
      element: <Login />,
    },
    {
      path: '/',
      element: (
        <ProtectedRoute>
          <AdminLayout navItems={navItems} />
        </ProtectedRoute>
      ),
      children: [
        { index: true, element: <Navigate to={navItems[0]?.path || '/login'} replace /> },
        ...moduleRoutes,
      ],
    },
  ])

  return <RouterProvider router={router} />
}
