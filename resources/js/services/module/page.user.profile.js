import Form from '../form'
export default class ProfileManger extends Form {
    constructor() {
        super()
    }

    async orders(orderableId='') {
		// console.log(slug, 'slug')
		let apiEnd = 'order/index';
        return await this.get(apiEnd, {orderableId: orderableId});
    }

    
}