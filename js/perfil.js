function returnReverseString(){
    var reverseString = "";
    for(var i = this.length - 1; i >= 0; i--){
        reverseString += this[i];
    }
    return reverseString;
}
