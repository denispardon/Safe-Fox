const headElem = document.getElementById("head");
const buttonsElem = document.getElementById("buttons");
const pagesElem = document.getElementById("pages");

//Класс, который представляет сам тест
class Quiz
{
	constructor(type, questions, results)
	{
		//Тип теста: 1 - классический тест с правильными ответами, 2 - тест без правильных ответов
		this.type = type;

		//Массив с вопросами
		this.questions = questions;

		//Массив с возможными результатами
		this.results = results;

		//Количество набранных очков
		this.score = 0;

		//Номер результата из массива
		this.result = 0;

		//Номер текущего вопроса
		this.current = 0;
	}

	Click(index)
	{
		//Добавляем очки
		let value = this.questions[this.current].Click(index);
		this.score += value;

		let correct = -1;

		//Если было добавлено хотя одно очко, то считаем, что ответ верный
		if(value >= 1)
		{
			correct = index;
		}
		else
		{
			//Иначе ищем, какой ответ может быть правильным
			for(let i = 0; i < this.questions[this.current].answers.length; i++)
			{
				if(this.questions[this.current].answers[i].value >= 1)
				{
					correct = i;
					break;
				}
			}
		}

		this.Next();

		return correct;
	}

	//Переход к следующему вопросу
	Next()
	{
		this.current++;
		
		if(this.current >= this.questions.length) 
		{
			this.End();
		}
	}

	//Если вопросы кончились, этот метод проверит, какой результат получил пользователь
	End()
	{
		for(let i = 0; i < this.results.length; i++)
		{
			if(this.results[i].Check(this.score))
			{
				this.result = i;
			}
		}
	}
} 

//Класс, представляющий вопрос
class Question 
{
	constructor(text, answers)
	{
		this.text = text; 
		this.answers = answers; 
	}

	Click(index) 
	{
		return this.answers[index].value; 
	}
}

//Класс, представляющий ответ
class Answer 
{
	constructor(text, value) 
	{
		this.text = text; 
		this.value = value; 
	}
}

//Класс, представляющий результат
class Result 
{
	constructor(text, value)
	{
		this.text = text;
		this.value = value;
	}

	//Этот метод проверяет, достаточно ли очков набрал пользователь
	Check(value)
	{
		if(this.value <= value)
		{
			return true;
		}
		else 
		{
			return false;
		}
	}
}

//Массив с результатами
const results = 
[
	new Result("Вы не можите жить без интернета", 0),
	new Result("Пара часов без интернета будут проблематичными", 4),
	new Result("Вы не против отдохнуть в интернете", 9),
	new Result("У вас отсутствует интернет зависимость", 14)
];

//Массив с вопросами
const questions = 
[
	new Question("На что похожа ваша реакция, когда на телефон пришло уведомление о новом сообщении?", 
	[
		new Answer("Празднование", 0),
		new Answer("Спокойствие", 1),
	]),

	new Question("Часто ли вы пользуетесь интернетом утром и перед тем, как лечь спать?", 
	[
		new Answer("Очень часто", 0),
		new Answer("Бывает", 1),
		new Answer("Редко", 2),
		new Answer("Никогда", 3)
	]),

	new Question("Пользуетесь ли вы интернетом, когда отдыхаете с друзьями?", 
	[
		new Answer("Очень часто", 0),
		new Answer("Бывает", 1),
		new Answer("Редко", 2),
		new Answer("Никогда", 3)
	]),

	new Question("Вы способны полностью отказаться от интернета на одну неделю?", 
	[
		new Answer("Без проблем", 1),
		new Answer("Это невозможно", 0),
	]),

	new Question("Вы только что сделали селфи. Каковы ваши дальнейшие действия?", 
	[
		new Answer("Выключаете телефон", 1),
		new Answer("Выкладываете фото в сеть", 0),
		new Answer("Отправляете фото друзьям", 0),
	]),

	new Question("Вы забыли заплатить за интернет и находитесь в оффлайне уже целых 15 минут. Ваша реакция?", 
	[
		new Answer("Вы в панике", 0),
		new Answer("Вы в полном спокойствие", 1),
	]),

	new Question("Как вы предпочитаете общаться с близкими??", 
	[
		new Answer("Вживую", 1),
		new Answer("Через интернет", 0),
	]),

	new Question("Как вы думаете, на что была бы похожа ваша жизнь без интернета?", 
	[
		new Answer("Это ужасно!", 0),
		new Answer("Было бы лучше", 1),
	]),

	new Question("Что вы предпримете, если в кафе вам отказались говорить пароль от Wi-Fi?", 
	[
		new Answer("Начнете массовую драку", 0),
		new Answer("Удивитесь, но будете держать себя в руках", 1),
	]),

	new Question("Сколько времени вы проводите в интернете каждый день?", 
	[
		new Answer("больше 5 часов", 0),
		new Answer("около 3 часов", 1),
		new Answer("около 1 часа", 2),
		new Answer("несколько минут", 3),
	]),

	new Question("Ваш друг просит раздать ему драгоценный интернет, ваша реакция?", 
	[
		new Answer("Объявите ему войну", 0),
		new Answer("Убежите", 0),
		new Answer("Конечно раздадите", 1),
	])
];

//Сам тест
const quiz = new Quiz(1, questions, results);

Update();

//Обновление теста
function Update()
{
	//Проверяем, есть ли ещё вопросы
	if(quiz.current < quiz.questions.length) 
	{
		//Если есть, меняем вопрос в заголовке
		headElem.innerHTML = quiz.questions[quiz.current].text;

		//Удаляем старые варианты ответов
		buttonsElem.innerHTML = "";

		//Создаём кнопки для новых вариантов ответов
		for(let i = 0; i < quiz.questions[quiz.current].answers.length; i++)
		{
			let btn = document.createElement("button");
			btn.className = "button";

			btn.innerHTML = quiz.questions[quiz.current].answers[i].text;

			btn.setAttribute("index", i);

			buttonsElem.appendChild(btn);
		}
		
		//Выводим номер текущего вопроса
		pagesElem.innerHTML = (quiz.current + 1) + " / " + quiz.questions.length;

		//Вызываем функцию, которая прикрепит события к новым кнопкам
		Init();
	}
	else
	{
		//Если это конец, то выводим результат
		buttonsElem.innerHTML = "";
		headElem.innerHTML = quiz.results[quiz.result].text;
		pagesElem.innerHTML = "Очки: " + quiz.score;
	}
}

function Init()
{
	//Находим все кнопки
	let btns = document.getElementsByClassName("button");

	for(let i = 0; i < btns.length; i++)
	{
		//Прикрепляем событие для каждой отдельной кнопки
		//При нажатии на кнопку будет вызываться функция Click()
		btns[i].addEventListener("click", function (e) { Click(e.target.getAttribute("index")); });
	}
}

function Click(index) 
{
	//Получаем номер правильного ответа
	let correct = quiz.Click(index);

	//Находим все кнопки
	let btns = document.getElementsByClassName("button");

	//Делаем кнопки серыми
	for(let i = 0; i < btns.length; i++)
	{
		btns[i].className = "button button_passive";
	}

	//Если это тест с правильными ответами, то мы подсвечиваем правильный ответ зелёным, а неправильный - красным
	if(quiz.type == 1)
	{
		if(correct >= 0)
		{
			btns[correct].className = "button button_correct";
		}

		if(index != correct) 
		{
			btns[index].className = "button button_wrong";
		} 
	}
	else
	{
		//Иначе просто подсвечиваем зелёным ответ пользователя
		btns[index].className = "button button_correct";
	}

	//Ждём секунду и обновляем тест
	setTimeout(Update, 250);
}