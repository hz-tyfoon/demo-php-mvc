const hanldeDeleteTaksItem = (id) => {
  const xhr = new XMLHttpRequest();
  xhr.open("DELETE", "/todos", true);
  xhr.setRequestHeader("Content-type", "application/json");
  const data = {
    todoId: id,
  }
  const jsonData = JSON.stringify(data)
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      console.log("Item deleted with ID:", id);
    }
  };
  xhr.send(jsonData);
};
const confirmDeleteTaksItem = (id) => {
  if (confirm("Are you sure you want to delete this item?")) {
    hanldeDeleteTaksItem(id);
  }
};
