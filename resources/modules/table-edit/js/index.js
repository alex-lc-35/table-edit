import SpreadsheetApp from './SpreadsheetApp';

document.addEventListener('DOMContentLoaded', () => {
    console.log("Table-edit index");

    const el = document.querySelector('[data-table]');
    if (el) {
        const tableName = el.dataset.table;
        SpreadsheetApp.init(el, tableName);
    }
});
