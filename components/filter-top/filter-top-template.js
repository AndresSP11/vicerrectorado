export function agregarFilterTop(targetId, elementConfigs) {
    // Cargar el template del botón
    fetch('/components/filter-top/filter-top-template.html')
        .then(response => response.text())
        .then(data => {
            // Crear un nuevo div y agregar el contenido del template al DOM
            const div = document.createElement('div');
            div.innerHTML = data;
            const template = div.querySelector('#filter-top-template');
            const clone = template.content.cloneNode(true);

            // Insertar el contenido en el contenedor objetivo
            const target = document.getElementById(targetId);
            target.appendChild(clone);
        })
        .catch(error => {
            console.error('Error al cargar el template del botón:', error);
        });
}

export class FilterTop {
    constructor(containerId) {
        this.container = document.getElementById(containerId);
        
        if (!this.container) {
            throw new Error(`Container with id "${containerId}" not found.`);
        }
    }
  
    createPair({ type, labelText, inputType, options = [], id, classes = [], visible = true }) {
        const pair = document.createElement('div');
        pair.classList.add('pair');
        if (!visible) pair.classList.add('hidden');
        if (id) pair.id = id;
        pair.classList.add(...classes);
    
        // Create label
        if (labelText) {
            const label = document.createElement('label');
            label.textContent = labelText;
            pair.appendChild(label);
        }
    
        // Create input or other element
        let element;
        if (type === 'button') {
            element = document.createElement('button');
            element.textContent = labelText || 'Button';
        } else if (type === 'input') {
            element = document.createElement('input');
            element.type = inputType || 'text';
        } else if (type === 'select') {
            element = document.createElement('select');
            options.forEach(option => {
            const opt = document.createElement('option');
            opt.value = option.value || option;
            opt.textContent = option.text || option;
            element.appendChild(opt);
            });
        } else if (type === 'span') {
            element = document.createElement('span');
            element.textContent = labelText || 'Span';
        }
    
        if (element) pair.appendChild(element);
    
        return pair;
    }
    
    addPairToColumn(pair, columnNumber = 1) {
        const id_col = '#column-' + columnNumber;
        console.log(id_col);
        console.log(this.container);
        
        
        const column = this.container.querySelector(id_col);
        console.log(column);
        
        if (!column) {
            throw new Error(`Column ${columnNumber} not found.`);
        }
        column.appendChild(pair);
    }
    
    configureElement(id, { visible, addClasses = [], removeClasses = [], addId, removeId }) {
        const element = document.getElementById(id);
        if (!element) {
            throw new Error(`Element with id "${id}" not found.`);
        }
    
        // Visibility
        if (typeof visible === 'boolean') {
            element.classList.toggle('hidden', !visible);
        }
    
        // Add classes
        if (addClasses.length) {
            element.classList.add(...addClasses);
        }
    
        // Remove classes
        if (removeClasses.length) {
            element.classList.remove(...removeClasses);
        }
    
        // Add or remove ID
        if (addId) {
            element.id = addId;
        }
        if (removeId) {
            element.removeAttribute('id');
        }
    }
}