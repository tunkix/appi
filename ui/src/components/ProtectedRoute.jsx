import { Navigate } from 'react-router-dom'
import { useAuth } from '@/hooks/useAuth'

export default function ProtectedRoute({ roles, children }) {
  const { user, loading } = useAuth()

  if (loading) {
    return (
      <div className="flex items-center justify-center min-h-screen">
        <p className="text-gray-500">Loading...</p>
      </div>
    )
  }

  if (!user) {
    return <Navigate to="/login" replace />
  }

  if (roles && roles.length > 0) {
    const hasPermission = roles.some(r => user.permissions?.includes(r))
    if (!hasPermission) {
      return <Navigate to="/" replace />
    }
  }

  return children
}
