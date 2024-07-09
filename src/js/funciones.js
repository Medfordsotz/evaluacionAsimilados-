import Swal from 'sweetalert2';
export const validarFormulario = (formulario, excepciones = [] ) => {
    const elements = formulario.querySelectorAll("input, select, textarea");
    let validarFormulario = []
    elements.forEach( element => {
        if(!element.value.trim() && ! excepciones.includes(element.id) ){
            element.classList.add('is-invalid');
          
            validarFormulario.push(false)
        }else{
            element.classList.remove('is-invalid');
        }
    });

    let noenviar = validarFormulario.includes(false);

    return !noenviar;
}

export const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})

export const formatearFecha = (fechaConCeros) => {
    var componentes = fechaConCeros.split(" ")[0].split("-");
    var dia = componentes[2];
    var mes = componentes[1];
    var anio = componentes[0];
    var fechaFormateada = anio + "-" + mes + "-" + dia;
    return fechaFormateada;
}


export const formatoTiempo = (numero) => {
    return new Promise((resolve) => {
        const numeroStr = String(numero);

        // Extraer los valores para años, meses y días
        const anios = numeroStr.slice(0, -4);
        const meses = numeroStr.slice(-4, -2);
        const dias = numeroStr.slice(-2);

        // Convertir los valores a números enteros
        const aniosNum = parseInt(anios);
        const mesesNum = parseInt(meses);
        const diasNum = parseInt(dias);

        // Generar el texto para años, meses y días
        const aniosTexto = aniosNum > 0 ? (aniosNum === 1 ? '1 año' : `${aniosNum} años`) : '';
        const mesesTexto = mesesNum > 0 ? `${mesesNum} meses` : '';
        const diasTexto = diasNum > 0 ? `${diasNum} días` : '';

        // Construir el resultado final
        let resultado = '';
        if (aniosTexto !== '') resultado += aniosTexto;
        if (mesesTexto !== '') {
            if (resultado !== '') resultado += ' ';
            resultado += mesesTexto;
        }
        if (diasTexto !== '') {
            if (resultado !== '') resultado += ' ';
            resultado += diasTexto;
        }

        resolve(resultado);
    });




};


export const cargando = () => {
    const overlay = document.createElement('div');
    overlay.id = 'loadingOverlay';
    overlay.style.position = 'fixed';
    overlay.style.top = '0';
    overlay.style.left = '0';
    overlay.style.width = '100%';
    overlay.style.height = '100%';
    overlay.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
    overlay.style.display = 'flex';
    overlay.style.alignItems = 'center';
    overlay.style.justifyContent = 'center';
    overlay.style.zIndex = '1200'; 
    
    const spinner = document.createElement('div');
    spinner.className = 'spinner-border';
    spinner.style.width = '3rem';
    spinner.style.height = '3rem';
    spinner.style.color = 'white';
    
    const srOnly = document.createElement('span');
    srOnly.className = 'sr-only';
    srOnly.innerText = ' ';
    
    spinner.appendChild(srOnly);
    overlay.appendChild(spinner);
    document.body.appendChild(overlay);
};

export const cerrarCargando = () => {
    const overlay = document.getElementById('loadingOverlay');
    if (overlay) {
        document.body.removeChild(overlay);
    }
};



