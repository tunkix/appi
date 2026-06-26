import { createContext, useContext, useState, useEffect, useCallback } from 'react'
import { getSettings, updateSettings as updateSettingsApi } from '@/services/settingsService'

const SettingsContext = createContext(null)

export function SettingsProvider({ children }) {
  const [settings, setSettings] = useState(null)
  const [loading, setLoading] = useState(true)

  useEffect(() => {
    getSettings()
      .then(res => setSettings(res.data || {}))
      .catch(() => setSettings({}))
      .finally(() => setLoading(false))
  }, [])

  const updateSettings = useCallback(async (payload) => {
    await updateSettingsApi(payload)
    setSettings(prev => ({ ...prev, ...payload }))
  }, [])

  return (
    <SettingsContext.Provider value={{ settings, loading, updateSettings }}>
      {children}
    </SettingsContext.Provider>
  )
}

export function useSettingsContext() {
  const ctx = useContext(SettingsContext)
  if (!ctx) throw new Error('useSettingsContext must be used within SettingsProvider')
  return ctx
}
