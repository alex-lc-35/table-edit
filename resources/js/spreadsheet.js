import jspreadsheet from 'jspreadsheet-ce'
import 'jspreadsheet-ce/dist/jspreadsheet.css'
import 'jspreadsheet-ce/dist/jspreadsheet.themes.css'
import { fetch } from '@/table-edit/api.js';
document.addEventListener('DOMContentLoaded', async () => {
    const el = document.getElementById('spreadsheet');
    const tableName = el.dataset.table;
    let options = await fetch(tableName);
    initialize(options)
})

function initialize(options) {
    const el = document.getElementById('spreadsheet')
    if (el) {
        jspreadsheet(el, options)
    }
}
