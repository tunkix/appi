import { useState, useEffect } from 'react'
import { useNavigate, useParams } from 'react-router-dom'
import { api } from '@/utils/api'

export default function ContactForm() {
  const { id } = useParams()
  const navigate = useNavigate()
  const isEdit = Boolean(id)

  const [form, setForm] = useState({
    first_name: '',
    last_name: '',
    company: '',
    job_title: '',
    email: '',
    notes: '',
  })
  const [submitting, setSubmitting] = useState(false)
  const [error, setError] = useState('')

  useEffect(() => {
    if (isEdit) {
      api.get(`/api/contacts/${id}`)
        .then(res => {
          const c = res.data
          setForm({
            first_name: c.first_name || '',
            last_name: c.last_name || '',
            company: c.company || '',
            job_title: c.job_title || '',
            email: c.email || '',
            notes: c.notes || '',
          })
        })
        .catch(() => navigate('/contacts'))
    }
  }, [id, isEdit, navigate])

  function handleChange(e) {
    setForm(prev => ({ ...prev, [e.target.name]: e.target.value }))
  }

  async function handleSubmit(e) {
    e.preventDefault()
    setError('')
    setSubmitting(true)
    try {
      if (isEdit) {
        await api.put(`/api/contacts/${id}`, form)
      } else {
        await api.post('/api/contacts', form)
      }
      navigate('/contacts')
    } catch (err) {
      setError(err.data?.message || err.message || 'Save failed')
    } finally {
      setSubmitting(false)
    }
  }

  return (
    <div className="max-w-lg">
      <h1 className="text-2xl font-bold mb-4">{isEdit ? 'Edit Contact' : 'New Contact'}</h1>
      {error && <p className="text-red-600 text-sm mb-4">{error}</p>}
      <form onSubmit={handleSubmit} className="space-y-4">
        <div className="grid grid-cols-2 gap-4">
          <div>
            <label className="block text-sm font-medium text-gray-700 mb-1">First Name</label>
            <input name="first_name" value={form.first_name} onChange={handleChange} required
              className="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
          </div>
          <div>
            <label className="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
            <input name="last_name" value={form.last_name} onChange={handleChange} required
              className="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
          </div>
        </div>
        <div>
          <label className="block text-sm font-medium text-gray-700 mb-1">Company</label>
          <input name="company" value={form.company} onChange={handleChange}
            className="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>
        <div>
          <label className="block text-sm font-medium text-gray-700 mb-1">Job Title</label>
          <input name="job_title" value={form.job_title} onChange={handleChange}
            className="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>
        <div>
          <label className="block text-sm font-medium text-gray-700 mb-1">Email</label>
          <input name="email" type="email" value={form.email} onChange={handleChange}
            className="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>
        <div>
          <label className="block text-sm font-medium text-gray-700 mb-1">Notes</label>
          <textarea name="notes" value={form.notes} onChange={handleChange} rows={3}
            className="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>
        <div className="flex gap-3">
          <button type="submit" disabled={submitting}
            className="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 disabled:opacity-50 text-sm">
            {submitting ? 'Saving...' : 'Save'}
          </button>
          <button type="button" onClick={() => navigate('/contacts')}
            className="bg-gray-200 text-gray-700 px-4 py-2 rounded hover:bg-gray-300 text-sm">
            Cancel
          </button>
        </div>
      </form>
    </div>
  )
}
