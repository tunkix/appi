import { useAuth } from '@/hooks/useAuth'

export default function Dashboard() {
  const { state } = useAuth()

  return (
    <div>
      <h1 className="text-2xl font-bold mb-6">Dashboard</h1>
      <div className="bg-white rounded shadow p-6">
        <p className="text-gray-600">
          Welcome back, <span className="font-medium text-gray-900">{state.user?.email}</span>.
        </p>
        <p className="text-sm text-gray-500 mt-1">
          You are logged in as <span className="font-medium">{state.user?.groups?.join(', ') || 'User'}</span>.
        </p>
      </div>

      <div className="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
        <div className="bg-white rounded shadow p-6">
          <p className="text-sm text-gray-500">Users</p>
          <p className="text-2xl font-bold mt-1">—</p>
        </div>
        <div className="bg-white rounded shadow p-6">
          <p className="text-sm text-gray-500">Modules</p>
          <p className="text-2xl font-bold mt-1">—</p>
        </div>
        <div className="bg-white rounded shadow p-6">
          <p className="text-sm text-gray-500">Status</p>
          <p className="text-2xl font-bold mt-1 text-green-600">Online</p>
        </div>
      </div>
    </div>
  )
}
