const hanldeDeleteTaksItem = (id) => {
  const xhr = new XMLHttpRequest();
  xhr.open("DELETE", "/todos/" + id, true);
  xhr.setRequestHeader("Content-type", "application/json");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      console.log("Item deleted with ID:", id);
    }
  };
  xhr.send();
};
const confirmDeleteTaksItem = (id) => {
  if (confirm("Are you sure you want to delete this item?")) {
    hanldeDeleteTaksItem(id);
  }
};
