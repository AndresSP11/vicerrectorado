function createElement(type, id, attributes = {}, innerHTML = '') {
    const element = document.createElement(type);
    element.id = id;

    for (const key in attributes) {
        if (attributes.hasOwnProperty(key)) {
            element.setAttribute(key, attributes[key]);
        }
    }

    element.innerHTML = innerHTML;
    return element;
}

function createLabel(id, text) {
    return createElement('label', id, {}, text);
}

function createInput(id, type = 'text', attributes = {}) {
    attributes.type = type;
    return createElement('input', id, attributes);
}

function createSelect(id, options = [], attributes = {}) {
    const select = createElement('select', id, attributes);
    options.forEach(option => {
        const optionElement = createElement('option', '', { value: option.value }, option.text);
        select.appendChild(optionElement);
    });
    return select;
}

function createSpan(id, text) {
    return createElement('span', id, {}, text);
}

function createButton(id, text, attributes = {}) {
    return createElement('button', id, attributes, text);
}


export function agregarControlGroup(targetId, elementsConfigs) {
    // Cargar el template
    fetch('/components/control-group/control-group-template.html')
        .then(response => response.text())
        .then(data => {
            // Crear un nuevo div y agregar el contenido del template al DOM
            const div = document.createElement('div');
            div.innerHTML = data;
            const template = div.querySelector('#control-group-template');
            const clone = template.content.cloneNode(true);

            col = 0;
            index = 10;

            // Configurar botones
            elementsConfigs.forEach((config, index) => {
                if (index % 3 === 0) {
                    col++;
                }

                const element = clone.querySelector(`#r${index + 1}`);
                if (config.type) {
                    const btn = botones.find(boton => boton.type === config.type);
                    element.classList.add(btn.class)
                    element.textContent = btn.text;
                    element.addEventListener('click', btn.action);
                } else {
                    element.classList.add('hidden');
                }

            });

            // Agregar al contenedor
            const target = document.getElementById(targetId);
            target.appendChild(clone);
        })
        .catch(error => console.error('Error cargando el template:', error));
}


// Example usage:
const label = createLabel('label1', 'Name:');
const input = createInput('input1');
const select = createSelect('select1', [{ value: '1', text: 'Option 1' }, { value: '2', text: 'Option 2' }]);
const span = createSpan('span1', 'This is a span');
const button = createButton('button1', 'Submit');

document.body.appendChild(label);
document.body.appendChild(input);
document.body.appendChild(select);
document.body.appendChild(span);
document.body.appendChild(button);
