import React, {FunctionComponent, useState, useEffect} from 'react';
import Pokemon from './models/pokemon';
import POKEMONS from './models/Mock-pokemon';
  
const App: FunctionComponent = () => {
 const [pokemons, setPokemons] = useState<Pokemon[]>([]);

 useEffect(()=>{
    setPokemons(POKEMONS);   
 },[]);
    
 return (
  <div>
    <h1 className="center">Pokedex</h1>
    <div className="container">
        <div className="row">
            {pokemons.map(({id, name, picture, hp, cp, types})=>(
                <div className="col s6 m4" key={id}>
                <div className="card horizontal">
                    <div className="card-image">
                        <img src={picture} alt={name} />
                    </div>
                    <div className="card-stacked">
                    <div className="card-content">
                        <h5>{name}</h5>
                        <h6><small>HP:{hp}</small></h6>
                        <h6><small>CP:{cp}</small></h6>
                        <h6><small>TYPE: {types}</small></h6>
                    </div>
                    </div>
                </div>
                </div>
            ))}
            </div>
        </div>
    </div>
    )
}
                







             
  
export default App;