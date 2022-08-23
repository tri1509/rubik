
    const border = [
    '39% 61% 70% 30% / 42% 51% 49% 58%',
    '39% 61% 70% 30% / 57% 51% 49% 43%',
    '39% 61% 70% 30% / 57% 28% 72% 43%',
    '39% 61% 70% 30% / 57% 66% 34% 43% ',
    '65% 35% 70% 30% / 57% 66% 34% 43% ',
    '65% 35% 49% 51% / 42% 66% 34% 58% ',
    '65% 35% 49% 51% / 42% 25% 75% 58% ',
    '65% 35% 31% 69% / 42% 25% 75% 58% ',
    '65% 35% 31% 69% / 74% 25% 75% 26% ',
    '33% 67% 31% 69% / 30% 25% 75% 70% ',
    '33% 67% 31% 69% / 72% 31% 69% 28% ',
    '33% 67% 31% 69% / 39% 31% 69% 61% ',
  ]
  
  const spinner = document.querySelector('.spinner')
  
  for (let i = 0; i < 10; i++) {
    let box = document.createElement('div')
    box.classList.add('boxx')
    box.style.borderRadius = border[Math.floor(Math.random() * 12)]
    spinner.appendChild(box)
  }
  
  let boxes = document.querySelectorAll('.boxx')
  let index = 0
  const start = setInterval(() => {
    if (index % 2 == 0) {
      boxes[index].style.animationDirection = 'reverse'
    }
    index++
    if (index == 10) {
      index = 0
    }
  }, 10)
