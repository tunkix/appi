import { lazy } from 'react'

const ContactsList = lazy(() => import('./components/ContactsList'))
const ContactForm = lazy(() => import('./components/ContactForm'))

export default {
  slug: 'contacts',
  nav: {
    group: 'crm',
    label: 'Contacts',
    icon: 'users',
    order: 1,
  },
  routes: [
    { path: '/contacts', element: <ContactsList />, roles: ['contacts.view'] },
    { path: '/contacts/new', element: <ContactForm />, roles: ['contacts.create'] },
    { path: '/contacts/edit/:id', element: <ContactForm />, roles: ['contacts.edit'] },
  ],
}
