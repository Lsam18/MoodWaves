import { Link } from "react-router-dom"
import './WhatsHappeningCard.css'

function WhatsHappeningCard()
{
    return (
        <a 
            target="_blank" 
            href="http://localhost:5173/create-post" 
            rel="noreferrer"
        >
            <div className='whats-happening-card'>
                                
                
                <div className='whats-happening-details'>
                    <p>
                        Click To Genarate AI Image
                    </p>
                 
                </div>

            </div>
        </a>
    )
}

export { WhatsHappeningCard }