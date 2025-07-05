import jspreadsheet from 'jspreadsheet-ce'
import 'jspreadsheet-ce/dist/jspreadsheet.css'
import 'jspreadsheet-ce/dist/jspreadsheet.themes.css'
import { fetch } from '@/table-edit/api.js';
document.addEventListener('DOMContentLoaded', async () => {
    let options = await fetch('ma-super-table');
    initialize(options)
})

function initialize(options) {
    const el = document.getElementById('spreadsheet')
    if (el) {
        jspreadsheet(el, options)
    }
}
