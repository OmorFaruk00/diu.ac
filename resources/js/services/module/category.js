import Form from '../form'
export default class OTPManager extends Form {
    constructor() {
        super()
    }

    async all(slug) {
        let apiEnd = 'category';
        return await this.get(apiEnd, {slug: slug});
    }

}