export function userCan(user, permission) {
  return user?.permissions?.includes(permission) ?? false
}

export function userHasGroup(user, group) {
  return user?.groups?.includes(group) ?? false
}
