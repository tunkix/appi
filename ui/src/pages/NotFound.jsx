import { Link } from 'react-router-dom'
import Button from '@/components/ui/Button'

export default function NotFound() {
  return (
    <div className="flex flex-col items-center justify-center py-16">
      <h1 className="text-6xl font-bold text-gray-300">404</h1>
      <p className="text-lg text-gray-500 mt-2">Page not found.</p>
      <Link to="/" className="mt-6 inline-block">
        <Button>Back to Dashboard</Button>
      </Link>
    </div>
  )
}
