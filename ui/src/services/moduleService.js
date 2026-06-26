import api from '@/utils/api'

export async function getModules() {
  const { data } = await api.get('/api/modules')
  return data
}
