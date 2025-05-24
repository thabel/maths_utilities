document.addEventListener('DOMContentLoaded', () => {
  const container = document.getElementById('conditions-container');
  const addBtn = document.getElementById('add-condition');

  addBtn.addEventListener('click', () => {
    const conditions = container.querySelectorAll('.num-and-modulus');
    const index = conditions.length;

    const div = document.createElement('div');
    div.className = 'num-and-modulus';
    div.dataset.index = index;
    div.innerHTML = `
      <div class="input-group">
        <label for="a${index}">a<span class="small">${index + 1}:</span></label>
        <input type="number" id="a${index}" name="conditions[${index}][a]" required>
      </div>
      <div class="input-group">
        <label for="m${index}">(mod) m<span class="small">${index + 1}:</span></label>
        <input type="number" id="m${index}" name="conditions[${index}][m]" required>
      </div>
      <button type="button" class="remove-condition m-0 bg-color-red-500">Remove</button>
    `;
    container.appendChild(div);
    updateRemoveButtons();
  });

  container.addEventListener('click', (e) => {
    if (e.target.classList.contains('remove-condition')) {
      const conditions = container.querySelectorAll('.num-and-modulus');
      if (conditions.length > 2) {
        e.target.closest('.num-and-modulus').remove();
        updateRemoveButtons();
      }
    }
  });

  function updateRemoveButtons() {
    const conditions = container.querySelectorAll('.num-and-modulus');
    const disable = conditions.length <= 2;
    conditions.forEach(div => {
      div.querySelector('.remove-condition').disabled = disable;
    });
  }

  updateRemoveButtons();
});
