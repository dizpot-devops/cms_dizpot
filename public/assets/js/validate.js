function validateMoney(val) {
    var valid = /^\d{0,4}(\.\d{0,2})?$/.test(val);
    return valid;
}