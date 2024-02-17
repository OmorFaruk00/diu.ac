import Form from '../form'
export default class SearchManager extends Form {
    constructor() {
        super()
    }

    async all(key='') {
		// console.log(slug, 'slug')
		let apiEnd = 'products';
        return await this.get(apiEnd, {search: key});
    }

    
}