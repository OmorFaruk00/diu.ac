import Form from '../form'

export default class Vendor extends Form {
    constructor() {
        super()
    }

    async single(slug) {
        return await this.get(`vendor/${slug}`);
    }

    async all(slug) {
        return await this.get(`category`, {slug: slug});
    }

    async vendorProducts(vendorId) {
        return await this.get(`/products?vendorId=${vendorId}`);
    }

    async vendorProjects(vendorId) {
        return await this.get(`/projects?vendorId=${vendorId}`);
    }

    async vendorClients(vendorId) {
        return await this.get(`/clients?vendorId=${vendorId}`);
    }

    async vendorTestimonials(vendorId) {
        return await this.get(`/testimonials?vendorId=${vendorId}`);
    }
    
}
