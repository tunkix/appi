import { Suspense } from 'react'
import { Outlet, Link, useNavigate, useLocation } from 'react-router-dom'
import { useAuth } from '@/hooks/useAuth'
import { useTheme } from '@/contexts/ThemeContext'
import { initials } from '@/utils/formatters'
import Badge from '@/components/ui/Badge'

const groupLabels = {
  admin: 'Admin',
  crm: 'CRM',
}

const groupOrder = ['admin', 'crm']

// Simple SVG icon components
const icons = {
  dashboard: <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" /></svg>,
  users: <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" /></svg>,
  settings: <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>,
  contacts: <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>,
}

export default function AdminLayout({ navItems }) {
  const { state, logout } = useAuth()
  const { theme, toggleTheme } = useTheme()
  const navigate = useNavigate()
  const location = useLocation()

  async function handleLogout() {
    await logout()
    navigate('/login')
  }

  const coreNav = [
    { path: '/dashboard', label: 'Dashboard', icon: 'dashboard', group: 'admin' },
    { path: '/users', label: 'Users', icon: 'users', group: 'admin' },
    { path: '/settings', label: 'Settings', icon: 'settings', group: 'admin' },
  ]

  const allItems = [
    ...coreNav.map(n => ({ ...n, isCore: true })),
    ...navItems.map(n => ({ ...n, icon: n.icon || 'contacts', isCore: false })),
  ]

  const grouped = {}
  for (const item of allItems) {
    const g = item.group || 'other'
    if (!grouped[g]) grouped[g] = []
    grouped[g].push(item)
  }

  const sortedGroups = Object.keys(grouped).sort(
    (a, b) => (groupOrder.indexOf(a) !== -1 ? groupOrder.indexOf(a) : 99) - (groupOrder.indexOf(b) !== -1 ? groupOrder.indexOf(b) : 99)
  )

  function isActive(path) {
    return location.pathname === path || location.pathname.startsWith(path + '/')
  }

  return (
    <div className="flex h-screen bg-gray-50">
      <aside className="w-64 bg-gray-900 text-white flex flex-col">
        <div className="p-4 text-xl font-bold border-b border-gray-700">
          <Link to="/">appi</Link>
        </div>
        <nav className="flex-1 p-4 space-y-6 overflow-y-auto">
          {sortedGroups.map(group => (
            <div key={group}>
              <p className="text-xs uppercase tracking-wider text-gray-500 mb-2 px-3">
                {groupLabels[group] || group}
              </p>
              <div className="space-y-1">
                {grouped[group].map(item => (
                  <Link
                    key={item.path}
                    to={item.path}
                    className={`flex items-center gap-3 px-3 py-2 rounded text-sm ${
                      isActive(item.path)
                        ? 'bg-gray-700 text-white'
                        : 'text-gray-400 hover:bg-gray-800 hover:text-white'
                    }`}
                  >
                    {icons[item.icon] || icons.contacts}
                    <span>{item.label}</span>
                  </Link>
                ))}
              </div>
            </div>
          ))}
        </nav>
        <div className="p-4 border-t border-gray-700 space-y-2">
          <div className="flex items-center gap-3">
            <div className="w-8 h-8 rounded-full bg-gray-600 flex items-center justify-center text-xs font-medium">
              {initials(state.user?.email)}
            </div>
            <div className="flex-1 min-w-0">
              <p className="text-sm truncate">{state.user?.email}</p>
              <Badge variant="blue" className="text-[10px]">
                {(state.user?.groups || [])[0] || 'user'}
              </Badge>
            </div>
          </div>
          <div className="flex gap-2">
            <button
              onClick={toggleTheme}
              className="flex-1 text-xs text-gray-400 hover:text-white py-1 px-2 rounded hover:bg-gray-800"
            >
              {theme === 'dark' ? 'Light' : 'Dark'}
            </button>
            <button
              onClick={handleLogout}
              className="flex-1 text-xs text-gray-400 hover:text-white py-1 px-2 rounded hover:bg-gray-800"
            >
              Sign out
            </button>
          </div>
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
