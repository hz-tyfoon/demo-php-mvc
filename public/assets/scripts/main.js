const hanldeDeleteTaksItem = (target, id) => {
  const item = target.closest("li.task-item");
  const xhr = new XMLHttpRequest();
  xhr.open("DELETE", "/todos", true);
  xhr.setRequestHeader("Content-type", "application/json");
  const data = {
    todoIds: [id],
  };
  const jsonData = JSON.stringify(data);
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      const responseData = JSON.parse(xhr.responseText);
      if (xhr.status === 200 && responseData.success) {
        item.remove();
      }
      console.log(responseData);
    }
  };
  xhr.send(jsonData);
};

const confirmDeleteTaksItem = (target, id) => {
  if (confirm("Are you sure you want to delete this item?")) {
    hanldeDeleteTaksItem(target, id);
  }
};
