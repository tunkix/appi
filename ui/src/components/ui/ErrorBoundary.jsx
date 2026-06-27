import { useRouteError } from 'react-router-dom'
import Button from '@/components/ui/Button'

export default function ErrorBoundary() {
  const error = useRouteError()
  const isDev = import.meta.env.DEV

  if (isDev) {
    console.error('Caught by ErrorBoundary:', error)
  }

  return (
    <div className="flex flex-col items-center justify-center py-16 max-w-lg mx-auto text-center">
      <div className="w-16 h-16 rounded-full bg-red-100 flex items-center justify-center mb-4">
        <svg className="w-8 h-8 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z" />
        </svg>
      </div>
      <h1 className="text-2xl font-bold text-gray-800 mb-2">Something went wrong</h1>
      <p className="text-gray-500 mb-6">
        An unexpected error occurred while rendering this page. Please try again.
      </p>
      {isDev && error && (
        <pre className="w-full text-left text-sm bg-gray-100 rounded p-4 mb-6 overflow-auto max-h-40 text-red-600">
          {error.message || error.statusText || String(error)}
        </pre>
      )}
      <div className="flex gap-3">
        <Button variant="secondary" onClick={() => window.location.reload()}>
          Try Again
        </Button>
        <Button onClick={() => window.location.href = '/dashboard'}>
          Back to Dashboard
        </Button>
      </div>
    </div>
  )
}
