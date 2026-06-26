import api from '@/utils/api'

export async function getSettings() {
  const { data } = await api.get('/api/settings')
  return data
}

export async function updateSettings(payload) {
  const { data } = await api.put('/api/settings', payload)
  return data
}
