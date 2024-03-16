import { useState } from "react";
import axios from 'axios';

function Search() {

    const [keyword, setKeyWord] = useState()

    const test = () => {
        axios.get(`https://api.dictionaryapi.dev/api/v2/entries/en/${keyword}`)
        .then((res) => {
          console.log(res);
        })
      }

    return (
        <>
            <input className="text-black" onChange={e => setKeyWord(e.target.value)}/>
            <button onClick={test}>Search</button>
        </>
    )
}

export default Search;