function lsTest() {
    try {
        localStorage.setItem('name', 'mehul');
        localStorage.removeItem('name');
        return true;
    } catch (e) {
        return false;
    }
}
if (lsTest() === true) {
    alert('LocalStorage is Enabled');
} else {
    alert('LocalStorage is disabled');
}