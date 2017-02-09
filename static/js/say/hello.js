var color = ['blue', 'red', 'green', 'yellow', 'violet', 'black'];

function addBlueClass(elemenet) {
    elemenet.className = color[Math.floor(Math.random() * color.length)];
}