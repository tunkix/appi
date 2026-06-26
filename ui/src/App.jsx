import { useState, useEffect } from 'react'
import { createBrowserRouter, RouterProvider, Navigate } from 'react-router-dom'
import { AuthProvider } from '@/contexts/AuthContext'
import { ThemeProvider } from '@/contexts/ThemeContext'
import { SettingsProvider } from '@/contexts/SettingsContext'
import ProtectedRoute from '@/components/ProtectedRoute'
import AdminLayout from '@/layouts/AdminLayout'
import Login from '@/pages/Login'
import Dashboard from '@/pages/Dashboard'
import UsersList from '@/pages/UsersList'
import UserForm from '@/pages/UserForm'
import Settings from '@/pages/Settings'
import NotFound from '@/pages/NotFound'
import { modules } from 'virtual:modules'

export default function App() {
  return (
    <AuthProvider>
      <ThemeProvider>
        <AppContent />
      </ThemeProvider>
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
      group: m.nav.group,
      icon: m.nav.icon,
    }))

  const moduleRoutes = moduleDefs.flatMap(m =>
    (m.routes || []).map(route => ({
      path: route.path,
      element: <ProtectedRoute permissions={route.permissions}>{route.element}</ProtectedRoute>,
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
          <SettingsProvider>
            <AdminLayout navItems={navItems} />
          </SettingsProvider>
        </ProtectedRoute>
      ),
      children: [
        { index: true, element: <Navigate to="/dashboard" replace /> },
        { path: 'dashboard', element: <Dashboard /> },
        { path: 'users', element: <ProtectedRoute permissions={['users.create', 'users.edit', 'users.delete']}><UsersList /></ProtectedRoute> },
        { path: 'users/new', element: <ProtectedRoute permissions={['users.create']}><UserForm /></ProtectedRoute> },
        { path: 'users/:id/edit', element: <ProtectedRoute permissions={['users.edit']}><UserForm /></ProtectedRoute> },
        { path: 'settings', element: <ProtectedRoute permissions={['admin.settings']}><Settings /></ProtectedRoute> },
        ...moduleRoutes,
        { path: '*', element: <NotFound /> },
      ],
    },
  ])

  return <RouterProvider router={router} />
}
