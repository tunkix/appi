import { useState, useEffect } from 'react'
import { Link } from 'react-router-dom'
import { api } from '@/utils/api'

export default function ContactsList() {
  const [contacts, setContacts] = useState([])
  const [loading, setLoading] = useState(true)
  const [search, setSearch] = useState('')

  useEffect(() => {
    api.get(`/api/contacts?search=${encodeURIComponent(search)}`)
      .then(res => setContacts(res.data || []))
      .catch(() => {})
      .finally(() => setLoading(false))
  }, [search])

  if (loading) return <p className="text-gray-500">Loading contacts...</p>

  return (
    <div>
      <div className="flex items-center justify-between mb-4">
        <h1 className="text-2xl font-bold">Contacts</h1>
        <Link
          to="/contacts/new"
          className="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 text-sm"
        >
          Add Contact
        </Link>
      </div>
      <input
        type="text"
        placeholder="Search contacts..."
        value={search}
        onChange={e => setSearch(e.target.value)}
        className="w-full border border-gray-300 rounded px-3 py-2 mb-4 focus:outline-none focus:ring-2 focus:ring-blue-500"
      />
      {contacts.length === 0 ? (
        <p className="text-gray-500">No contacts found.</p>
      ) : (
        <div className="bg-white rounded shadow overflow-hidden">
          <table className="w-full text-sm">
            <thead className="bg-gray-50 text-left">
              <tr>
                <th className="px-4 py-3 font-medium text-gray-600">Name</th>
                <th className="px-4 py-3 font-medium text-gray-600">Company</th>
                <th className="px-4 py-3 font-medium text-gray-600">Job Title</th>
                <th className="px-4 py-3 font-medium text-gray-600">Actions</th>
              </tr>
            </thead>
            <tbody>
              {contacts.map(contact => (
                <tr key={contact.id} className="border-t hover:bg-gray-50">
                  <td className="px-4 py-3">{contact.first_name} {contact.last_name}</td>
                  <td className="px-4 py-3">{contact.company}</td>
                  <td className="px-4 py-3">{contact.job_title}</td>
                  <td className="px-4 py-3">
                    <Link
                      to={`/contacts/edit/${contact.id}`}
                      className="text-blue-600 hover:underline"
                    >
                      Edit
                    </Link>
                  </td>
                </tr>
              ))}
            </tbody>
          </table>
        </div>
      )}
    </div>
  )
}
