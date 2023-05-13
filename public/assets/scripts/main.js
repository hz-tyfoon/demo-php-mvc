const hanldeDeleteTaksItem = (id) => {
  console.log("hanldeDeleteTaksItem triggered");
};
const confirmDeleteTaksItem = (id) => {
  if (confirm("Are you sure you want to delete this item?")) {
    hanldeDeleteTaksItem(id);
  }
};
