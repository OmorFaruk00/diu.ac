const Ziggy = {"url":"https:\/\/webdev.diu.ac","port":null,"defaults":{},"routes":{"homePage":{"uri":"\/","methods":["GET","HEAD"]},"about-us":{"uri":"about-us","methods":["GET","HEAD"]},"notice-board":{"uri":"notice-board","methods":["GET","HEAD"]},"admission":{"uri":"admission","methods":["GET","HEAD"]},"institute":{"uri":"institute","methods":["GET","HEAD"]},"alumni":{"uri":"alumni","methods":["GET","HEAD"]},"cell":{"uri":"cell","methods":["GET","HEAD"]},"contact-us":{"uri":"contact-us","methods":["GET","HEAD"]},"club":{"uri":"club","methods":["GET","HEAD"]},"publications":{"uri":"publications","methods":["GET","HEAD"]},"convocation":{"uri":"convocation","methods":["GET","HEAD"]},"certificate-verification":{"uri":"certificate-verification","methods":["GET","HEAD"]},"department-details":{"uri":"department\/{slug}","methods":["GET","HEAD"]}}};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    for (let name in window.Ziggy.routes) {
        Ziggy.routes[name] = window.Ziggy.routes[name];
    }
}

export { Ziggy };
