const app = Vue.createApp({
  data() {
    return {
      result: '',
      previousResult: '',
      memory: '',
      showModal: false,
      numbers: [
        [7, 8, 9],
        [4, 5, 6],
        [1, 2, 3],
        ['00', 0, '.']
      ],
      operators: ['+', '-', '*', '/', '^'],
      functions: ['sin', 'cos', 'tan', 'log', 'ln', 'sqrt', '(', ')', 'pi', 'e', 'abs', 'exp']
    };
  },
  created() {
    window.addEventListener('keydown', this.onKeyDown);
  },
  unmounted() {
    window.removeEventListener('keydown', this.onKeyDown);
  },
  methods: {
    appendNumber(num) {
      this.result += num;
    },
    appendOperator(op) {
      if (this.operators.includes(this.result.slice(-1))) return;
      this.result += op;
    },
    appendFunction(func) {
      if (func === '(' || func === ')') {
        this.result += func;
      } else if (func === 'pi') {
        this.result += Math.PI;
      } else if (func === 'e') {
        this.result += Math.E;
      } else {
        this.result += func + '(';
      }
    },
    calculate() {
      try {
        this.previousResult = this.result;
        this.result = math.evaluate(this.result).toString();
      } catch (error) {
        this.result = 'Error';
      }
    },
    clear() {
      this.result = '';
    },
    usePreviousResult() {
      this.result += this.previousResult;
    },
    memoryStore() {
      this.memory = this.result;
    },
    memoryRecall() {
      this.result += this.memory;
    },
    memoryClear() {
      this.memory = '';
    },
    onKeyDown(event) {
      const key = event.key;
      if (this.numbers.flat().includes(Number(key)) || this.operators.includes(key) || key === '(' || key === ')') {
        this.result += key;
      } else if (key === 'Enter' || key === '=') {
        this.calculate();
      } else if (key === 'Escape' || key === 'Delete' || key === 'Backspace') {
        this.clear();
      } else if (key === 'ArrowUp') {
        this.usePreviousResult();
      } else if (key === ',') {
        this.result += key;
      } else if (key === 'm' || key === 'M') {
        this.memoryStore();
      } else if (key === 'r' || key === 'R') {
        this.memoryRecall();
      } else if (key === 'c' || key === 'C') {
        this.memoryClear();
      }
    },
    openModal() {
      this.showModal = true;
    },
    closeModal() {
      this.showModal = false;
    },
  }
});

app.mount('#app');