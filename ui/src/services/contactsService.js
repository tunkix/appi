import api from '@/utils/api'

export async function getContacts(params = {}) {
  const { data } = await api.get('/api/contacts', { params })
  return data
}

export async function getContact(id) {
  const { data } = await api.get(`/api/contacts/${id}`)
  return data
}

export async function createContact(payload) {
  const { data } = await api.post('/api/contacts', payload)
  return data
}

export async function updateContact(id, payload) {
  const { data } = await api.put(`/api/contacts/${id}`, payload)
  return data
}

export async function deleteContact(id) {
  const { data } = await api.delete(`/api/contacts/${id}`)
  return data
}
