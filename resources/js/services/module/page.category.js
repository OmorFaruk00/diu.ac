import Form from '../form'
export default class Category extends Form {
    constructor() {
        super();
    }

    async all(slug) {
        let apiEnd = 'category';
        return await this.get(apiEnd, {slug: slug});
    }

    async subCategories(slug) {
        let apiEnd = 'category';
        let response =  await this.get(apiEnd, {slug: slug});
        return response;
    }

    async sectionData(categoryId) {
        let apiEnd = '/category/'+categoryId;
        let response = await this.get(apiEnd, {categories: true, brands: true, vendors: true, products: true});
        return response;
    }

    async brands(slug) {
        let apiEnd = 'brands/index';
        let response = await this.get(apiEnd, {category_slug: slug});
        return response;
    }

	async products(slug) {
        let apiEnd = 'products';
        let response = await this.get(apiEnd, {category_slug: slug});
        return response;
    }

    async vendors(slug) {
        let apiEnd = 'vendor/index';
        let response = await this.get(apiEnd, {category_slug: slug});
        return response;
    }


}
