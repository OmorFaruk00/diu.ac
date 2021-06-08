import Form from '../form'

export default class HomeManager extends Form{
	constructor(data) {
		super(data);
		this.brandLoader = false;
	}

	async  productsBySubCategory(id){
		let apiEnd = '/products';
		let response = await this.get(apiEnd, {category_id: id});
		return response;
	}

	async firstCategory() {
		let apiEnd = '/category/single';
		let response = await this.get(apiEnd);
		return response;
	}

	async getProductSectionData(categoryId) {
		let apiEnd = '/category/'+categoryId;
		let response = await this.get(apiEnd, {categories: true, variants: true, products: true});
		return response;
	}
	async brands() {
		this.brandLoader = true;
		let apiEnd = '/brands/index';
		let response = await this.get(apiEnd);
		this.brandLoader = false;
		return response;
	}
	async vendors() {
        let apiEnd = 'vendor/index';
        let response = await this.get(apiEnd);
        return response;
    }

	showToaster(message) {
		this.network.successToast(message)
	}
} 