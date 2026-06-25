import { Suspense } from 'react'
import { Outlet, Link, useNavigate } from 'react-router-dom'
import { useAuth } from '@/hooks/useAuth'

export default function AdminLayout({ navItems }) {
  const { user, logout } = useAuth()
  const navigate = useNavigate()

  async function handleLogout() {
    await logout()
    navigate('/login')
  }

  return (
    <div className="flex h-screen bg-gray-50">
      <aside className="w-64 bg-gray-900 text-white flex flex-col">
        <div className="p-4 text-xl font-bold border-b border-gray-700">
          <Link to="/">appi</Link>
        </div>
        <nav className="flex-1 p-4 space-y-1">
          {navItems.map(item => (
            <Link
              key={item.path}
              to={item.path}
              className="block px-3 py-2 rounded hover:bg-gray-700 text-sm"
            >
              {item.label}
            </Link>
          ))}
        </nav>
        <div className="p-4 border-t border-gray-700">
          <p className="text-sm text-gray-400 truncate">{user?.email}</p>
          <button onClick={handleLogout} className="text-sm text-gray-400 hover:text-white mt-1">
            Sign out
          </button>
        </div>
      </aside>
      <main className="flex-1 overflow-auto p-6">
        <Suspense fallback={<p className="text-gray-500">Loading...</p>}>
          <Outlet />
        </Suspense>
      </main>
    </div>
  )
}
