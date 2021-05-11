const OnDragStart = (e) => {
  e.dataTransfer.setData("text/plain", e.target.id);
};

const OnDragOver = (e) => {
  e.preventDefault();
};

const OnDrop = (e) => {
  const id = e.dataTransfer.getData("text");

  console.log(id);

  const draggedElement = document.getElementById(id);

  e.target.appendChild(draggedElement);
};
