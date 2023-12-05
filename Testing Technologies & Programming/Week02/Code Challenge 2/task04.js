class User {
    constructor(number) {
        this._numberOfArticles = 0;
    }

    get numberOfArticles() {
        return this._numberOfArticles;
    }

    set numberOfArticles(value) {
        this._numberOfArticles = value;
    }
    calcScores() {
        return this.numberOfArticles;
    }
}

class Author extends User {

    calcScores() {
        return this.numberOfArticles * 10 + 20;
    }

}

class Editor extends User {

    calcScores() {
        return this.numberOfArticles * 6 + 15;
    }

}

const author = new Author(8);
console.log(author.calcScores());

const editor = new Editor(15);
console.log(editor.calcScores());