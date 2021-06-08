import Form from '../form'
export default class Subcategory extends Form {
    constructor() {
        super()
    }

    async allData(categoryId) {
        let apiEnd = '/category/'+categoryId;
        return await this.get(apiEnd, {variants: true, brands: true, vendors: true, products: true});
    }

}