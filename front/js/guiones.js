// Datos del producto
    let producto = {
      url: "https://www.google.com/aclk?sa=L&ai=DChsSEwj3zfq654eQAxUiilAGHUdlCwIYACICCAEQHhoCZGc&ae=2&co=1&ase=2&gclid=CjwKCAjw6P3GBhBVEiwAJPjmLtW3WFe5Ll4CJgHe311CV9XI_FlVwfncwUESmoVLy0RgE97PsgtfjhoCSdsQAvD_BwE&cce=2&category=acrcp_v1_71&sig=AOD64_30-MC2GquuxVdqlfWHKBqythDXmQ&ctype=5&q=&nis=4&ved=2ahUKEwjPnPK654eQAxUCVEEAHXXbPBYQ9aACKAB6BAgHEBM&adurl=", // Cambia a la URL correcta
      nombre: "Lenovo I7. Tope Gama",
      precio: 150,
      descripcion: "descripcion lo que sea",
      stock: 58
    };
    let precio = document.getElementById("producto");
        let parrafos = document.getElementsByClassName("importante");
        for (let i = 0; i < parrafos.lenght; i++){
            parrafos[i].style.color="red";
            parrafos[i].style.fontWeight = "bold";
        }
            const container = document.getElementById('product-container');