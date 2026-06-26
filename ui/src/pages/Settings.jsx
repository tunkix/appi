import { useState, useEffect } from 'react'
import { getSettings, updateSettings } from '@/services/settingsService'
import Button from '@/components/ui/Button'
import Input from '@/components/ui/Input'
import Spinner from '@/components/ui/Spinner'

export default function Settings() {
  const [settings, setSettings] = useState({})
  const [form, setForm] = useState({})
  const [loading, setLoading] = useState(true)
  const [saving, setSaving] = useState(false)
  const [message, setMessage] = useState('')

  useEffect(() => {
    getSettings()
      .then(res => {
        const s = res.data || {}
        setSettings(s)
        setForm({ ...s })
      })
      .catch(() => {})
      .finally(() => setLoading(false))
  }, [])

  function handleChange(key, value) {
    setForm(prev => ({ ...prev, [key]: value }))
  }

  async function handleSave(e) {
    e.preventDefault()
    setSaving(true)
    setMessage('')
    try {
      await updateSettings(form)
      setSettings({ ...form })
      setMessage('Settings updated.')
    } catch (err) {
      setMessage(err.response?.data?.message || 'Save failed.')
    } finally {
      setSaving(false)
    }
  }

  if (loading) {
    return (
      <div className="flex items-center justify-center py-12">
        <Spinner />
      </div>
    )
  }

  const keys = Object.keys(settings)

  if (keys.length === 0) {
    return (
      <div>
        <h1 className="text-2xl font-bold mb-4">Settings</h1>
        <p className="text-gray-500">No settings available.</p>
      </div>
    )
  }

  return (
    <div className="max-w-lg">
      <h1 className="text-2xl font-bold mb-4">Settings</h1>
      {message && (
        <p className={`text-sm mb-4 ${message === 'Settings updated.' ? 'text-green-600' : 'text-red-600'}`}>
          {message}
        </p>
      )}
      <form onSubmit={handleSave} className="space-y-4">
        {keys.map(key => (
          <Input
            key={key}
            label={key.replace(/_/g, ' ').replace(/\b\w/g, c => c.toUpperCase())}
            name={key}
            value={form[key] ?? ''}
            onChange={e => handleChange(key, e.target.value)}
          />
        ))}
        <Button type="submit" loading={saving}>Save Settings</Button>
      </form>
    </div>
  )
}
