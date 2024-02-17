import Form from '../form'
export default class ProductManager extends Form {
    constructor() {
        super()
    }

    async all(slug) {
		console.log(slug, 'slug')
		let apiEnd = 'products';
        return await this.get(apiEnd, {slug: slug});
    }

    async filteredProducts(query) {
		let apiEnd = 'products'+query;
        return await this.get(apiEnd);
    }

}