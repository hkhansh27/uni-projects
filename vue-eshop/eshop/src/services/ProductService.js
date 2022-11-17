import Api from '@/services/Api'

export default {
  findOneById (credentials) {
    return Api().post('productDetails', credentials)
  }
}
