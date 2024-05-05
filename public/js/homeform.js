function createSnowflake() {
    const snowflake = document.createElement('div');
    snowflake.classList.add('snowflake');
    snowflake.style.left = Math.random() * window.innerWidth + 'px';
    snowflake.style.animationDuration = Math.random() * 3 + 2 + 's';
    snowflake.style.opacity = Math.random();
    snowflake.style.fontSize = Math.random() * 12 + 8 + 'px';
  
    snowflake.innerHTML = '❄';
  
    document.body.appendChild(snowflake);
  
    setTimeout(() => {
      snowflake.remove();
    }, 5000);
  }
  
  setInterval(createSnowflake, 100);