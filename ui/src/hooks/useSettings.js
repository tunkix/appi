import { useState, useEffect } from 'react'
import { api } from '@/utils/api'

export function useSettings() {
  const [settings, setSettings] = useState(null)

  useEffect(() => {
    api.get('/api/settings')
      .then(res => setSettings(res.data))
      .catch(() => {})
  }, [])

  return settings
}
