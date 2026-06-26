export function isEmail(value) {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)
}

export function isRequired(value) {
  return value !== null && value !== undefined && String(value).trim() !== ''
}

export function minLength(min) {
  return (value) => String(value).length >= min
}

export function maxLength(max) {
  return (value) => String(value).length <= max
}
