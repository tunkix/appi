import { Navigate } from 'react-router-dom'
import { useAuth } from '@/hooks/useAuth'

export default function ProtectedRoute({ permissions, children }) {
  const { state } = useAuth()

  if (state.loading) {
    return (
      <div className="flex items-center justify-center min-h-screen">
        <p className="text-gray-500">Loading...</p>
      </div>
    )
  }

  if (!state.user) {
    return <Navigate to="/login" replace />
  }

  if (permissions && permissions.length > 0) {
    const hasPermission = permissions.some((p) => state.user.permissions?.includes(p))
    if (!hasPermission) {
      return <Navigate to="/" replace />
    }
  }

  return children
}
